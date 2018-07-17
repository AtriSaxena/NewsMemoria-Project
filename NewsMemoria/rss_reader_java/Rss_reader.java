/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rss_reader;
import java.io.*;
import java.net.*;
import java.sql.*;
import java.util.concurrent.TimeUnit;
/**
 *
 * @author BoNd
 */
 
public class Rss_reader {

    public static void main(String[] args) {
        // TODO code application logic here
    int flag=0;    
       readRSS("http://www.space.com/home/feed/site.xml");
    }
    
   
    public static void readRSS(String urlAddress)
    { String temp1 = null,temp2=null,temp3=null,temp4=null,temp5=null;      
        try{
            URL rssUrl=new URL(urlAddress);
            BufferedReader in= new BufferedReader(new InputStreamReader(rssUrl.openStream()));
            String sourcecode="";
            String line;
            int i=1;
            while(i<=2)
            {
            while((line=in.readLine())!=null)
            {
                if(line.contains("<title>"))
                {
                    int firstPos=line.indexOf("<title>");
                     temp1=line.substring(firstPos);
                    temp1=temp1.replace("<title>", "");
                  temp1=temp1.replace("&#039;","'");
                    int lastPos=temp1.indexOf("</title>");
                    temp1=temp1.substring(0,lastPos);
                    System.out.println("Title:"+temp1);
                    //sourcecode+=temp+'\n';  
                }
                if(line.contains("<description>"))
                {
                    int firstPos=line.indexOf("<description>");
                    temp2=line.substring(firstPos);
                    temp2=temp2.replace("<description>", "");
                    //temp=temp.replace("&lt;","<");
                    //temp=temp.replace("/&gt;", ">");
                    int lastPos=temp2.indexOf("</description>");
                    temp2=temp2.substring(0,lastPos);
                    System.out.println("Description:"+temp2);
                    //String temp2;
                   // int temp1=temp.lastIndexOf(".jpg");
                 //   System.out.println(temp.subSequence(5,55));
                    
                }
                if(line.contains("<media:content type=\"image/jpeg\" url="))
                {
                    int firstPos=line.indexOf("<media:content type=\"image/jpeg\" url=");
                    temp3=line.substring(firstPos);
                    temp3=temp3.replace("<media:content type=\"image/jpeg\" url=", "");
                    int lastPos=temp3.indexOf("/>");
                   temp3=temp3.substring(0,lastPos);
                   System.out.println("image:"+temp3);
                }
                if(line.contains("<pubDate>"))
                {
                    int firstPos=line.indexOf("<pubDate>");
                    temp4=line.substring(firstPos);
                    temp4=temp4.replace("<pubDate>", "");
                    int lastPos=temp4.indexOf("</pubDate>");
                   temp4=temp4.substring(0,lastPos);
                   System.out.println("Date:"+temp4);
                }
                if(line.contains("<link>"))
                {
                    int firstPos=line.indexOf("<link>");
                    temp5=line.substring(firstPos);
                    temp5=temp5.replace("<link>", "");
                    int lastPos=temp5.indexOf("</link>");
                   temp5=temp5.substring(0,lastPos);
                   System.out.println("Link:"+temp5);
                }
                if((temp1!=null)&&(temp2!=null)&&(temp3!=null)&&(temp4!=null)&&(temp5!=null))
                {
                data(temp1,temp2,temp3,temp4,temp5); 
                }
            }
            TimeUnit.SECONDS.sleep(2);
           i++;
            }
            in.close();
            //return sourcecode;
        }
        catch(MalformedURLException ue)
        {
            System.out.println("Malformed URL");
        }
        catch(IOException ioe)
        {
            System.out.println("Something went wrong reading the contents");
            
        }
        //return null;
        
        
    }
    public static void data(String title,String desc,String image,String date,String link)
    {
        
         try{  
             
             System.out.println(title);
             System.out.println(desc);
             System.out.println(image);
             System.out.println(date);
             System.out.println(link);
             
  int id=2;
 
    connect ob=new connect();
    Connection con=ob.conn();
 
    //  Statement stmt=con.createStatement();  
  
//ResultSet rs=stmt.executeQuery("select * from ");  
        PreparedStatement ps=con.prepareStatement("Insert into rss_data(category_data,title,image,description,date,link) values(?,?,?,?,?,?)");
        
        ps.setString(1,"Science");
        ps.setString(2,title);
        ps.setString(3,image);
        ps.setString(4,desc);
        ps.setString(5,date);
        ps.setString(6,link);
        
        int rs=ps.executeUpdate();
        System.out.println("result"+ rs);
         }
              catch(Exception e){ System.out.println(e);}
    }
}
