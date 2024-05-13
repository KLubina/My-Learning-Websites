package controlStructures;

public class ArraySum_Enhanced_For_Loop {
    public int sum(int[] numbers) {
        int total = 0;
        for (int number : numbers) {
            total += number;
        }
        return total;
    }

    public static void main(String[] args) {
        int[] numbers = {1, 2, 3, 4, 5};
        ArraySum_Enhanced_For_Loop arraySum = new ArraySum_Enhanced_For_Loop();
        System.out.println("Sum of Array: " + arraySum.sum(numbers));
    }
}