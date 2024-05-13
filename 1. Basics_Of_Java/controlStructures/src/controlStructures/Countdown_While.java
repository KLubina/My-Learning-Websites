package controlStructures;

public class Countdown_While {
    public void countDown(int start) {
        while (start > 0) {
            System.out.println("Countdown: " + start);
            start--;
        }
    }

    public static void main(String[] args) {
        Countdown_While countdown = new Countdown_While();
        countdown.countDown(10);
    }
}