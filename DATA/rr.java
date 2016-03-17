import java.util.Scanner;
public class RoundRobin
{
    private static boolean empty(int[] x, int n) {
        //System.out.print("Empty Check"); 
        for (int i = 0; i < n; i++)
            if (x[i] != 0)
                return false;
        return true;
    }

    public static void main(String[] args) {
        Scanner get = new Scanner(System.in);
        System.out.print("Enter quantum : ");
        int q = get.nextInt();
        System.out.print("Enter number of processes : ");
        int n = get.nextInt(), sum = 0, t = 0;
        int[] burst = new int[n], exec = new int[n], arrival = new int[n], wait = new int[n], tat = new int[n], start = new int[n], s = new int[n], e = new int[n];
        for (int i = 0; i < n; i++) {
            System.out.print("Arrival and Burst time for process " + (i + 1) + " : ");
            arrival[i] = get.nextInt();
            burst[i] = get.nextInt();
            exec[i] = burst[i];
            sum += burst[i];
        }

        for (int i = 0; i < n; i++) {
            if (burst[i] >= q) {
                if (start[i] == 0 && s[i] == 0) {
                    if (arrival[i] == t) {
                        start[i] = 0;
                        s[i] = 1;
                    } else {
                        start[i] = t - arrival[i] - 1;
                        s[i] = 1;
                    }
                }
                t += q;
                burst[i] -= q;
                if (burst[i] == 0 && e[i] == 0) {
                    tat[i] = t;
                    e[i] = 1;
                }

            } else if (burst[i] > 0 && burst[i] < q) {
                if (start[i] == 0 && s[i] == 0) {
                    if (arrival[i] == t) {
                        start[i] = 0;
                        s[i] = 1;
                    } else {
                        start[i] = t - arrival[i] - 1;
                        s[i] = 1;
                    }
                }
                t += burst[i];
                burst[i] = 0;
                if (burst[i] == 0 && e[i] == 0) {
                    tat[i] = t;
                    e[i] = 1;
                }

            }
            System.out.print(i + "\t" + burst[i] + "\n");
            if (empty(burst, n))
                break;
            else if (i == (n - 1))
                i = -1;
        }

        for (int i = 0; i < n; i++) {
            tat[i] = tat[i] + start[i] - arrival[i];
            wait[i] = tat[i] - exec[i];
        }

        System.out.println("P \t A \t B \t T \t W");
        for (int i = 0; i < n; i++) {
            System.out.println((i + 1) + " \t " + arrival[i] + " \t " + exec[i] + " \t " + tat[i] + " \t " + wait[i]);
        }
    }
}