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
import java.util.logging.*;
import org.jsoup.*;
import org.jsoup.nodes.*;
import org.jsoup.select.*;

public class rss_data1 {

  public static void main(String[] args)  {
    try {
        int i=0;
      String url = " http://zeenews.india.com/entertainment/and-more/your-vocal-pitch-can-tell-if-you-are-dominating-or-not_1877844.html ";
     url=url.replaceAll("\\s", "");
      Document doc = Jsoup.connect(url).get();
      Elements paragraphs = doc.select("p");
      for(Element p : paragraphs)
      {   System.out.println("Para"+i+"=");
          System.out.println(p.text());
          i++;
      }
    } 
    catch (IOException ex) {
      Logger.getLogger(rss_data1.class.getName())
            .log(Level.SEVERE, null, ex);
    }
  }
}

 