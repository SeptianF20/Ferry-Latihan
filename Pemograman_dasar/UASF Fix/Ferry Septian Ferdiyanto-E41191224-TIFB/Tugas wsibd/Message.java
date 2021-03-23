//import untuk scanner
import java.util.*;

public class Message{

	/**
	 *
	 */
	private static final Scanner SCANNER = new Scanner(System.in);

	public static void main(final String[] args) {

		final Scanner sc = SCANNER;
		final Message m = new Message();

		final int numLength = 10;
		final int num[] = new int[numLength];
		int i;
		i = 0;
		int numCek;

		do {
			System.out.print("masukkan angka ke-" + (i + 1) + " : ");
			num[i] = sc.nextInt();
			numCek = num[i];

			if (numCek >= 1 && numCek <= 7) {
				i++;
			} else {
			}

		} while (!m.isValid(numCek) || i < num.length);

		for (i = 0; i < num.length; i++) {
			final int numStat = num[i];
			switch (numStat) {
				case 1:
					System.out.print("D");

					break;
				case 2:
					System.out.print("W");

					break;
				case 3:
					System.out.print("E");

					break;
				case 4:
					System.out.print("L");

					break;
				case 5:
					System.out.print("H");

					break;
				case 6:
					System.out.print("O");

					break;
				case 7:
					System.out.print("R");

					break;

				default:
					System.out.print("404");

			}
			if (i != num.length - 1) {
				System.out.print(", ");
			}
		}

	}

	private boolean isValid(final int s) {
		if(s > 7 || s  < 1){
			System.out.println("Try again ;)" );
			return false;
		}  else return true;

	}
}