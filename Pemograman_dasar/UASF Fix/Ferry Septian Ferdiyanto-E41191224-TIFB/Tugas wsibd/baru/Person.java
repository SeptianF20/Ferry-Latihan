package Tugas wsibd;

public class Person {
    public String fName,lName,stuStatus;
    public int stuID;
    public Person(String fName, String lName, int stuID, String stuStatus){
        this.fName= fName;
        this.lName= lName;
        this.stuID= stuID;
        this.stuStatus= stuStatus;
        toString();
}
public String getFName(){
    return  fName;
}
public void setFName(String fName){
    this.fName = fName;
}
public String getLName(){
    return  lName;
}
public void setLName(String lName){
    this.lName = lName;
}
public int getStuID(){
    return  stuID;
}
public void setsetStuID(int stuID){
    this.stuID = stuID;
}
public String getStuStatus(){
    return  stuStatus;
}
public void setStuStatus(String stuStatus){
    this.stuStatus = stuStatus;
}
public static void main(String[] args) {
    Person sl = new Person("Lisa","Palombo",123456789,"Active");

    System.out.println("Name        : "+sl.getFName()+" "+sl.getLName()+" "+"Student ID   : "+sl.getStuID()+" "+"Status        :"+sl.getStuStatus());
    
}
    
}
 