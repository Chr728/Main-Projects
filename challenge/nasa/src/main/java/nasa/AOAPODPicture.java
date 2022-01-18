package nasa;

public class AOAPODPicture{
    public String date;
    public String explanation;
    public  String hdurl;
    public String service_version;
    public String title;
    public String url;
    
    @Override
    public String toString(){
        return title + ":" + explanation + ":" + hdurl;
    }
}