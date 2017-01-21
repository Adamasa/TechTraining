using System;
using System.Linq;

public class Lesson02 {
    public static void Main(String[] args){
        /*
        Lesson02 逐次決定法
        配列dataを逐次決定法で昇順にソートして結果を出力するプログラムを作成してください。
        */

        // 1~10までの整数が格納された配列data
        int[] data = new int[] {1,2,3,4,5,6,7,8,9,10};

        // dataの中身をランダムに配置
        data = data.OrderBy(i => Guid.NewGuid()).ToArray();

        // 初期状態出力
        System.Console.WriteLine("初期状態 ：" + String.Join(",", data));

        // 0から要素数分ループ
        for (int i = 0; i < data.Length　-　1; i++){
            // iから要素数までループ
            // for (int j = i; j < data.Length; j++){

            //     // data[j]の値 <= data[i]の値の場合は交換
            //     if (data[j] <= data[i]) {
            //         // data[i]の値をtempに退避
            //         int temp = data[i];

            //         // data[i]にdata[j]を格納
            //         data[i] = data[j];

            //         // data[j]にtempを格納
            //         data[j] = temp;

            //     }


            // 対象のインデックスを最小インデックスに設定
            int minIndex = i;

            // iから要素数までループ
            for (int j = i + 1 ; j < data.Length; j++ ){
                // 最小インデックスの要素より小さい場合
                if (data[j] < data[minIndex]) {
                    // 最小インデックスを更新
                    minIndex = j;
                }
            }

            if (data[minIndex] <= data[i]) {
                // data[i]の値をtempに退避
                int temp = data[i];

                // data[i]にdata[j]を格納
                data[i] = data[minIndex];

                // data[j]にtempを格納
                data[minIndex] = temp;
            }

            // 途中経過出力
            System.Console.WriteLine((i+1) + "ループ目：" + String.Join(",", data));

        }
        // 最終結果出力
        System.Console.WriteLine("最終結果 ：" + String.Join(",", data));
    }
}