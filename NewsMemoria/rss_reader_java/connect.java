
package rss_reader;
import java.sql.*;

public class connect {
    Connection conn() throws Exception
    {
            
        
       Class.forName("com.mysql.jdbc.Driver");  

Connection con=DriverManager.getConnection(  
"jdbc:mysql://localhost/newsmemoria","root","");
//System.out.println("Connection established");
        return con;
    }
    
}
