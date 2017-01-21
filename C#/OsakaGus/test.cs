using NPOI.SS.UserModel;

public class test {
    public static void Main(String[] args){

        Iworkbook workbook = WorkbookFactory.Create("./test.xlsx");
        ISheet worksheet = workbook.GetSheetAt(0);
        int lastRow = worksheet.LastRowNum;

        for (int i = 0; i < lastRow; i++) {
            IRow row = worksheet.GetRow(i);
            ICell cell = row?.GetCell(0);
            System.Console.WriteLine(cell?.StringCellValue);
        }
    }
}

