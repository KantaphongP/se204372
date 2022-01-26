import java.util.Vector;

public class OurGroup {

    private Vector<String> groupMembers;
    public OurGroup()
    {
        groupMembers = new Vector<String>();
        groupMembers.add("Kantaphong Pititnorasate"); //PUT YOUR NAME HERE
        groupMembers.add("Timakarn Akepatchimsiri");
        groupMembers.add("Thidarat Piajan");
        groupMembers.add("Bussakorn Palatorn");
    }
    public Vector<String> getGroupMembers () {
        return groupMembers;
    }

}