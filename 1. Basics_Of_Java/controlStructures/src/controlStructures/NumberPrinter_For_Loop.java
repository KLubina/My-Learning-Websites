package controlStructures;

public class NumberPrinter_For_Loop {
    public void printNumbers(int max) {
        for (int i = 1; i <= max; i++) {
            System.out.println("Number: " + i);
        }
    }

    public static void main(String[] args) {
        NumberPrinter_For_Loop numberPrinter = new NumberPrinter_For_Loop();
        numberPrinter.printNumbers(5);
    }
}