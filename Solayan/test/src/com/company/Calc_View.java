package com.company;
import java.util.Scanner;
public class Calc_View {
    public static void view() {
        Scanner input = new Scanner(System.in);
        Calc_Controller calculator = new Calc_Controller();
        System.out.println("1. Addition");
        System.out.println("2. Subtract");
        System.out.println("3. Multiplication");
        System.out.println("4. Division");
        System.out.print("Choose What you want to do:  ");
        int choice = input.nextInt();

        System.out.print("Enter first number: ");
        double fn = input.nextDouble();
        System.out.print("Enter second number: ");
        double sn = input.nextDouble();
    if(choice==1){
        calculator.addController(fn, sn);
    }else if (choice == 2 ){
        calculator.subtractController(fn, sn);
    }else if(choice == 3){
        calculator.multiplyController(fn, sn);
    }else if(choice == 4){
        calculator.divideController(fn,sn);
    }else{
        System.out.println("Please choose from 1-4 only!!");

    }

    }

}
