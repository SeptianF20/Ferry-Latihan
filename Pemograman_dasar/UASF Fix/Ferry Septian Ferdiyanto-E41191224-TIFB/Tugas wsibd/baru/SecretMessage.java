package baru;

import java.util.Scanner;
public class SecretMessage {
    public static void main(final String[] args) {
        final SecretMessage S = new SecretMessage();
        final Scanner SC = new Scanner(System.in);
        final int Lenght = 10;
        final char[] code = new char[10];
        final int[] num = new int[Lenght];
        int i = 0;
        int Cek;
       
        do{
            System.out.print("Input Number ke "+(i+1)+":");
            num[i] = SC.nextInt();
            Cek = num[i];
            if(Cek >= 1 && Cek <= 7){
                i++;
            }
        }while(i<num.length || S.Validate(i));
        for(i=0;i<num.length;i++){
            final int decode=num[i];
            switch(decode){
                case 1:
                    code[i] = 'D';
                break;
                case 2:
                    code[i] = 'W';
                break;
                case 3:
                    code[i] = 'E';
                break;
                case 4:
                    code[i] = 'L';
                break;
                case 5:
                    code[i] = 'H';
                break;
                case 6:
                    code[i] = 'O';
                break;
                case 7:
                    code[i] = 'R';
                break;
                default:
                    System.out.println("?");
            }
        }
        for(i=0;i<num.length;i++){
            System.out.print(code[i]);
        }
        System.out.println();
    }
   private boolean Validate(final int i){
	if(i > 7 || i  < 1)
            return false;
        else return true;
   }
}
