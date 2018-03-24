package com.company;
import java.util.Scanner;
public class Main {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        String contin = "1";
        while(!"0".equals(contin)){
            System.out.println("--------- Simple Calculator ------");
            Calc_View.view();
            System.out.println();
            System.out.println("Enter any key to continue and 0  to end: ");
            contin = input.next().toLowerCase();
        }

	// write your code here
    }

}
