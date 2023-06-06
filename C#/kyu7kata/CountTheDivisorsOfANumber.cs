public class CountTheDivisorsOfANumber
{
  public static int MineDivisors(int n)
  {
      int count = 0;
      for (int i = 1; i <= n; i++)
      {
          if (n % i == 0)
          {
              count++;
          }
      }
      return count;
  }

  public static int BestDivisors(int n)
  {
    // todo
    var numberOfDivisors = 0;
    for (int i = 1; i <= n; i++) {
      if (n % i == 0) {
        numberOfDivisors++; 
      }
    }
    return numberOfDivisors; 
  }
}