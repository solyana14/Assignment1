package com.company;

public class Calc_Model {

    public void add(double firstNumber, double secondNumber){
        System.out.println(firstNumber + secondNumber);
    }
    public void subtract(double firstNumber, double secondNumber){
        System.out.println(firstNumber - secondNumber);
    }
    public void multiply(double firstNumber, double secondNumber){
        System.out.println(firstNumber * secondNumber);
    }
    public void divide(double firstNumber, double secondNumber){
        if ( secondNumber== 0 ){
            System.out.println("Cant divide " + firstNumber + " by 0");
        }else {
            System.out.println(firstNumber / secondNumber);
        }
    }


}
