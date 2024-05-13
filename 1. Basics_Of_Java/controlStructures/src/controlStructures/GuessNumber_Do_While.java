package controlStructures;

public class GuessNumber_Do_While {
    public void guessUntilCorrect(int guess) {
        int answer = 7;
        do {
            if (guess == answer) {
                System.out.println("Correct Guess!");
            } else {
                System.out.println("Incorrect, try again!");
                guess++;
            }
        } while (guess != answer);
    }

    public static void main(String[] args) {
        GuessNumber_Do_While guessNumber = new GuessNumber_Do_While();
        guessNumber.guessUntilCorrect(1);
    }
}