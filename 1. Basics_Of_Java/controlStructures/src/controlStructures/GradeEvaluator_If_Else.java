package controlStructures;

public class GradeEvaluator_If_Else {
    public String evaluateGrade(int score) {
        if (score >= 90) {
            return "Excellent";
        } else if (score >= 75) {
            return "Good";
        } else if (score >= 50) {
            return "Pass";
        } else {
            return "Fail";
        }
    }

    public static void main(String[] args) {
        GradeEvaluator_If_Else evaluator = new GradeEvaluator_If_Else();
        int score = 88;
        System.out.println("Grade Evaluation: " + evaluator.evaluateGrade(score));
    }
}