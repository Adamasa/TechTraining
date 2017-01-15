using System;
using System.Linq;

public class Lesson02 {
    public static void Main(String[] args){
        /*
        Lesson03 隣接交換法
        配列dataを隣接交換法で昇順にソートして結果を出力するプログラムを作成してください。
        */

        // 1~10までの整数が格納された配列data
        int[] data = new int[] {1,2,3,4,5,6,7,8,9,10};

        // dataの中身をランダムに配置
        data = data.OrderBy(i => Guid.NewGuid()).ToArray();

        // 初期状態出力
        System.Console.WriteLine("初期状態 ：" + String.Join(",", data));

        // 0から要素数分ループ
        for (int i = 0; i < data.Length - 1; i++){
            // 最大要素数からiとぶつかるまでループ
            for (int j = data.Length - 1; i < j ; j--){

                // data[j]の値 < data[j-1]の値の場合は交換
                if (data[j] < data[j-1]) {
                    // data[j]の値をtempに退避
                    int temp = data[j];

                    // data[j]にdata[j-1]を格納
                    data[j] = data[j-1];

                    // data[j-1]にtempを格納
                    data[j-1] = temp;

                }
            }

            // 途中経過出力
            System.Console.WriteLine((i+1) + "ループ目：" + String.Join(",", data));

        }
        // 最終結果出力
        System.Console.WriteLine("最終結果 ：" + String.Join(",", data));
    }
}