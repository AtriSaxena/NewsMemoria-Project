
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package rss_reader;

/**
 *
 * @author BoNd
 */
import java.io.IOException;
import java.sql.PreparedStatement;
import java.util.logging.*;
import org.jsoup.*;
import org.jsoup.nodes.*;
import org.jsoup.select.*;
import java.sql.*;
public class rss_data2 {

  public static void main(String[] args)  {
     int i;
      Statement stmt = null;
      try{
      connect ob=new connect();
      java.sql.Connection con=ob.conn();
      stmt = con.createStatement();
      //for(i=3227;i<=5081;i++)
      //{
         String sql="select id,link from rss_data where id="+5059;
         ResultSet rs=stmt.executeQuery(sql);
         while(rs.next())
         {
         int id=rs.getInt("id");
        String link=rs.getString("link");
        System.out.println("link:"+link);
       link_data(id,link);
        // }
         
      }
      
     
      
     
     }
               catch(Exception e){ System.out.println(e);}
  }
      public static void link_data(int id,String url)
      {
      try {
      //String url = "http://www.cbsnews.com/news/scott-walker-endorses-cruz-ahead-of-wisconsin-primary/";
      url=url.replaceAll("\\s", "");
          Document doc = Jsoup.connect(url).get();
      Elements paragraphs = doc.select("p");
     
      for(Element p : paragraphs)
      {
          String para=p.text();
        data(id,para);
      //    System.out.println(p.text());
        }
      } 
    catch(IOException ex) {
      Logger.getLogger(rss_data.class.getName())
            .log(Level.SEVERE, null, ex);
    }
    
  }

    public static void data(int id,String para)
    {

         try{  
            
    connect ob=new connect();
    java.sql.Connection con=ob.conn();
 
    //  Statement stmt=con.createStatement();  
  
//ResultSet rs=stmt.executeQuery("select * from ");  
     PreparedStatement ps=con.prepareStatement("Insert into link_desc(link_id,para) values(?,?)");
        
        
        ps.setInt(1,id);
        ps.setString(2,para);
        
        int rs=ps.executeUpdate();    
        
        System.out.println("result"+ rs);
         }
              catch(Exception e){ System.out.println(e);}
    }
}

  





