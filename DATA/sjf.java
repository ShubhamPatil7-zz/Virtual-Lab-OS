import java.util.*;
class process1 
{
    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int c = 0, r = 0, n = 0, temp = 0, a = 0;
        float s1 = 0.0 f, s2 = 0.0 f;
        int ex[], wt[], tat[], at[], p1[];
        System.out.println("Enter number of processes:");
        n = in .nextInt();
        ex = new int[n];
        wt = new int[n];
        tat = new int[n];
        at = new int[n];
        p1 = new int[n];
        System.out.println("Enter arrival time:");
        for (int i = 0; i <= n - 1; i++) {
            at[i] = in .nextInt();
        }
        System.out.println("Enter execution time:");
        for (int i = 0; i <= n - 1; i++) {
            ex[i] = in .nextInt();
        }
        for (int i = 0; i <= n - 1; i++) {
            p1[i] = i;
        }
        for (int i = 0; i <= n - 1; i++) {
            r = r + ex[i];
            if (i == 0) {
                tat[i] = r;
            } else {
                for (int p = i; p <= n - 1; p++) {
                    for (int q = p + 1; q <= n - 1; q++) {
                        if (ex[p] > ex[q] && at[p] < at[q]) {
                            temp = ex[p];
                            ex[p] = ex[q];
                            ex[q] = temp;
                            temp = at[p];
                            at[p] = at[q];
                            at[q] = temp;
                            temp = p1[p];
                            p1[p] = p1[q];
                            p1[q] = temp;
                        }
                    }
                }

            }
            a = r - at[i];
            tat[i] = a;
        }
        for (int i = 0; i <= n - 1; i++) {
            wt[i] = tat[i] - ex[i];
        }
        for (int i = 0; i <= n - 1; i++) {
            s1 = s1 + tat[i];
            s2 = s2 + wt[i];
        }
        s1 = s1 / n;
        s2 = s2 / n;
        System.out.println("Number of processes:" + n);
        System.out.println("Process Arrival Time Execution time Turn Around Time Waiting Time");
        for (int i = 0; i <= n - 1; i++) {
            System.out.println("P" + p1[i] + " " + at[i] + " " + ex[i] + " " + tat[i] + " " + wt[i]);
        }
        System.out.print("\n\nAverage for turn around time:" + s1);
        System.out.print("\n\nAverage for waiting time:" + s2);
    }
}