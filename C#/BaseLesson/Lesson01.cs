using System;

public class Lesson01 {
    public static void Main(String[] args){
        /*
        Lesson01 3の倍数と3がつく値の出力
        1から100までの整数のうち、3の倍数と3がつく値を出力するプログラムを作成してください。
        */

        int CONST_MIN = 1;
        int CONST_MAX = 100;
        String CONST_SEARCH = "3";

        String Result = "";

        // CONST_MINからCONST_MAXまでの整数をループ
        for (int i = CONST_MIN; i < CONST_MAX; i++)　{
            String temp = i.ToString();
            
            // 3の倍数または3がつく値の場合
            if (i % 3 == 0 || temp.Contains(CONST_SEARCH)){
                Result += i + ", ";
            }
        }

        Result = Left(Result, Result.Length - 2);

        System.Console.WriteLine(Result);

    }

    public static String Left(String str, int len)
    {
        return str.Substring(0, len);
    }
}