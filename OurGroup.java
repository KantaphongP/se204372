import java.util.Vector;

public class OurGroup {

    private Vector<String> groupMembers;
    public OurGroup()
    {
        groupMembers = new Vector<String>();
        groupMembers.add("Kantaphong Pititnorasate"); //หัวหน้ากลุ่ม
        groupMembers.add("Timakarn Akepatchimsiri");
    }
    public Vector<String> getGroupMembers () {
        return groupMembers;
    }

}