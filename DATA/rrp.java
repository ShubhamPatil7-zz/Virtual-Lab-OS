import java.util.*;
class process1 
{
    public static void main(String args[]) throws Exception 
    {
        Scanner sc = new Scanner(System.in);
        int bur[], rem[], wai[], ta[], p[], p1[];
        int size = 0, q, b = 0, t = 0, flag = 0, temp = 0;
        System.out.print("Enter the no of process:");
        size = sc.nextInt();
        bur = new int[size];
        wai = new int[size];
        ta = new int[size];
        p = new int[size];
        rem = new int[size];
        p1 = new int[size];
        System.out.print("Enter burst time:");
        for (int i = 0; i < size; i++)
            bur[i] = sc.nextInt();

        System.out.print("Enter priority:");
        for (int i = 0; i < size; i++)
            p[i] = sc.nextInt();

        for (int i = 0; i < size; i++)
            p1[i] = i;

        System.out.print("Enter quantum time:");
        q = sc.nextInt();
        
        for (int k = 0; k < size; k++)
        {
            for (int l = k + 1; l < size; l++)
            {
                if (p[k] > p[l])
                {
                    temp = p[k];
                    p[k] = p[l];
                    p[l] = temp;
                    temp = p1[k];
                    p1[k] = p1[l];
                    p1[l] = temp;
                    temp = bur[k];
                    bur[k] = bur[l];
                    bur[l] = temp;
                }
            }
        }
        for (int i = 0; i < size; i++)
            rem[i] = bur[i];
        do
        {
            flag = 0;
            for (int i = 0; i < size; i++) 
            {
                if (rem[i] >= q) 
                {
                    for (int j = 0; j < size; j++) 
                    {
                        if (j == i)
                            rem[i] = rem[i] - q;
                        else if (rem[j] > 0)
                            wai[j] += q;
                    }
                } 
                else if (rem[i] > 0) 
                     {
                          for (int j = 0; j < size; j++) 
                          {
                            if (j == i)
                                rem[i] = 0;
                            else if (rem[j] > 0)
                                   wai[j] += rem[i];
                          }
                     }
            }
            for (int i = 0; i < size; i++)
                if (rem[i] > 0)
                    flag = 1;
        } while (flag == 1);
        for (int i = 0; i < size; i++)
            ta[i] = wai[i] + bur[i];
        System.out.println("\nProcess\tPriority\tBurst time\tWaiting time\tTurnaroundtime");
        for (int i = 0; i < size; i++) 
        {
            System.out.println("P" + p1[i] + "\t" + p[i] + "\t\t" + bur[i] + "\t\t" + wai[i] + "\t\t" + ta[i]);
            b += wai[i];
            t += ta[i];
        }
        System.out.println("Average waiting time:" + (b / size));
        System.out.println("Average Turnaround time:" + (t / size));
    }
}