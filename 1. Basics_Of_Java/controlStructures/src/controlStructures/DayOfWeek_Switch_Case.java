package controlStructures;

public class DayOfWeek_Switch_Case {
    public String getDay(int day) {
        String dayName;
        switch (day) {
            case 1: dayName = "Sunday"; break;
            case 2: dayName = "Monday"; break;
            case 3: dayName = "Tuesday"; break;
            case 4: dayName = "Wednesday"; break;
            case 5: dayName = "Thursday"; break;
            case 6: dayName = "Friday"; break;
            case 7: dayName = "Saturday"; break;
            default: dayName = "Invalid day"; break;
        }
        return dayName;
    }

    public static void main(String[] args) {
        DayOfWeek_Switch_Case dayOfWeek = new DayOfWeek_Switch_Case();
        System.out.println(dayOfWeek.getDay(1));
    }
}