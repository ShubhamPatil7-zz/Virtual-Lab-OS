import java.util.*;
class rrp
{
    public static void main(String args[]) throws Exception {
        Scanner sc = new Scanner(System.in);
        int btv[], rem[], wtv[], tatv[], p[], process[];
        int n = 0, q, awt = 0, atat = 0, flag = 0, temp = 0;

        System.out.print("Enter the no of processes:");
        n = sc.nextInt();

        btv = new int[n];
        wtv = new int[n];
        tatv = new int[n];
        p = new int[n];
        rem = new int[n];
        process = new int[n];

        System.out.print("Enter burst time:");
        for (int i = 0; i < n; i++)
            btv[i] = sc.nextInt();

        System.out.print("Enter priority:");
        for (int i = 0; i < n; i++)
            p[i] = sc.nextInt();

        for (int i = 0; i < n; i++)
            process[i] = i;

        System.out.print("Enter quantum time:");
        q = sc.nextInt();

        for (int k = 0; k < n; k++) 
        {
            for (int l = k + 1; l < n; l++) {
                if (p[k] > p[l]) {
                    temp = p[k];
                    p[k] = p[l];
                    p[l] = temp;
                    temp = process[k];
                    process[k] = process[l];
                    process[l] = temp;
                    temp = btv[k];
                    btv[k] = btv[l];
                    btv[l] = temp;
                }
            }
        }
        for (int i = 0; i < n; i++)
            rem[i] = btv[i];
        do {
            flag = 0;
            for (int i = 0; i < n; i++) {
                if (rem[i] >= q) {
                    for (int j = 0; j < n; j++) {
                        if (j == i)
                            rem[i] = rem[i] - q;
                        else if (rem[j] > 0)
                            wtv[j] += q;
                    }
                } else if (rem[i] > 0) {
                    for (int j = 0; j < n; j++) {
                        if (j == i)
                            rem[i] = 0;
                        else if (rem[j] > 0)
                            wtv[j] += rem[i];
                    }
                }
            }
            for (int i = 0; i < n; i++)
                if (rem[i] > 0)
                    flag = 1;
        } while (flag == 1);
        for (int i = 0; i < n; i++)
            tatv[i] = wtv[i] + btv[i];
        System.out.println("\nProcess\tPriority\tBurst time\tWaiting time\tTurnaroundtime");
        for (int i = 0; i < n; i++) {
            System.out.println("P" + process[i] + "\t" + p[i] + "\t\t" + btv[i] + "\t\t" + wtv[i] + "\t\t" + tatv[i]);
            awt += wtv[i];
            atat += tatv[i];
        }

        System.out.println("Average waiting time:" + (awt / n));
        System.out.println("Average Turnaround time:" + (atat / n));
    }
}