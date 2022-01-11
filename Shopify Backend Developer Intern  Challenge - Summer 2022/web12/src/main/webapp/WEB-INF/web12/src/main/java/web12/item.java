package web12;



public class item {
    protected int id;
    protected String name = "christina";
    protected int quantity;
   

    public item() {}

    public item(int id, String name, int quantity) {
        this.id= id;
        this.name = name;
        this.quantity = quantity;
    }

   

    public int getId() {
        return id;
    }
    public void setId(int id) {
        this.id = id;
    }
    public String getName() {
        return name;
    }
    public void setName(String name) {
        this.name = name;
    }
    
    public int getQuantity() {
        return quantity;
    }
    public void setQuantity(int quantity) {
        this.quantity= quantity;
    }
}