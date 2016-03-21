import java.util.Scanner;

public class fifo
{
    public static void main(String[] args) throws Exception
    {
        int f,p,num=0, pageHit=0;
        boolean flag = true;
        Scanner sbp= new Scanner(System.in);
        System.out.println("Enter number of frames : ");
        f = sbp.nextInt();
        System.out.println("Enter number of pages : ");
        p = sbp.nextInt();
      
        int frame = new int[f];
        int pages = new int[p];
      
        for(int i=0; i<f; i++)
        {
            frame[i] = -1;
        }
      
        System.out.println("Enter page number : ");
        for(int i=0;i<p;i++)
            pages[i] = sbp.nextInt();
    
        for(int i=0; i<p; i++)
        {
            flag = true;
            int page = pages[i];
            for(int j=0; j<f; j++)
            {
                if(frame[j] == page)
                {
                    flag = false;
                    pageHit++;
                    break;
                }
            }
            if(num == f)
                num = 0;
          
            if(flag)
            {
                frame[num] = page;
                num++;
            }
            System.out.print("frame : ");
            for(int k=0; k<f; k++)
                System.out.print(frame[k]+" ");
            System.out.println();
          
        }
        System.out.println("No. of page hit : "+pageHit);
    }
}