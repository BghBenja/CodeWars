public class stringArrayMethods
{
  public static double[] MineToDoubleArray(string[] stringArray)
    {
        double[] result = new double[stringArray.Length];

        for (int i = 0; i < stringArray.Length; i++)
            result[i] = double.Parse(stringArray[i]);

        return result;
    }

    public static double[] BestToDoubleArray(string[] stringArray)
    {
        return stringArray.Select(x => Double.Parse(x)).ToArray();
    }
}