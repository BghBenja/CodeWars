public class CatsAndShelves
{
    public static int MineCats(int start, int finish) 
    {
        return (finish-start)/3 + (finish-start)%3;
    }

    public static int BestCats(int start, int finish)
  {
    var diff = finish - start;
    return diff / 3 + diff % 3;
  }
}