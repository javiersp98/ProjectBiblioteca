
package project_biblioteca;

import java.sql.*;
import static project_biblioteca.NewVinyl.conn;

//
// Autor: Javier Simón Perea
//

public class Project_Biblioteca {

    public static void main(String[] args) {
        
        /*LOG*/ System.out.println("PROGRAM INITIATED");
        
    }    
    
    public static void connect() throws ClassNotFoundException, SQLException {
        
        String sDriver = "com.mysql.jdbc.Driver";
        String sURL = "jdbc:mysql://localhost:3306/library?useSSL=false";        
        
        try {
            try {
                Class.forName(sDriver).newInstance();
            } catch (ClassNotFoundException ex) {
                /*LOG*/System.out.println("ERROR Driver not found");
            }
        } catch (InstantiationException ex) {
            /*LOG*/System.out.println("ERROR Instantiation");
        } catch (IllegalAccessException ex) {
            /*LOG*/System.out.println("ERROR Access to database is not autorized");
        }        
        
        try {            
            conn = DriverManager.getConnection(sURL, "root", "");
            /*LOG*/System.out.println("Connected to database");
        } catch (SQLException ex) {
            /*LOG*/System.out.println("ERROR DriverManager");
        }
        
    }
    
}
