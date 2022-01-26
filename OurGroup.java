import java.util.Vector;

public class OurGroup {

    private Vector<String> groupMembers;
    public OurGroup()
    {
        groupMembers = new Vector<String>();
        groupMembers.add("Kantaphong Pititnorasate"); //หัวหน้ากลุ่ม
<<<<<<< HEAD
       
=======
        groupMembers.add("Thidarat Piajan");
        groupMembers.add("Bussakorn Palatorn");
        groupMembers.add("Timakarn Akepatchimsiri");
>>>>>>> ed875996c5b3da1804a5fcf6b11e1324f0e9653f
    }
    public Vector<String> getGroupMembers () {
        return groupMembers;
    }

}