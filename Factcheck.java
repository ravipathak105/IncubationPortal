import java.util.Scanner;
class Factcheck
{

	public static void main(String...args)
	{
        int fact=1,num;
        Scanner s =new Scanner(System.in);
		System.out.println("Enter Number To get Factorial");
		num=s.nextInt();
		for(int i=1;i<=num;i++)
		{

          fact=fact*i;
         		
		}
		 System.out.println(fact);	

	}
}