using System;

public static class BuildASquare
{
  public static string MineGenerateShape(int n)
  {
    string[] result = new string[n];
    for (int i = 0; i < n; i++)
    {
      string line = new String('+', n);
      result[i] = line;
    }
    return string.Join("\n", result);
  }

  {
  public static string BestGenerateShape(int n)
    => string.Join("\n", Enumerable.Repeat(new string('+', n), n));
  }
}
