public class ManagingPeople
{
   public static void main(String[] args)
    {
        Person pl = new Person("Arial",37);
        Person p2 = new Person("Joseph",15);

        if(pl.getAge()==p2.getAge())
        {
            System.out.println(pl.getName()+"is the same age as" + p2.getName());
        }
        else
        {
            System.out.println(pl.getName()+"is NOT the same age as" + p2.getName());
        }