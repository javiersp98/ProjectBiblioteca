
package project_biblioteca;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.JPanel;
import javax.swing.JTable;
import static project_biblioteca.NewVinyl.conn;

public class Menu extends javax.swing.JFrame {

    public Menu() {
        initComponents();
        jTable1 = meterDatos(); 
        //JPanel panel = new JPanel();
        //this.add(panel);
        //panel.add(miTabla);
    
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jScrollPane1 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jScrollPane1.setViewportView(jTable1);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap(405, Short.MAX_VALUE)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 381, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(157, 157, 157))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addContainerGap(163, Short.MAX_VALUE)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 293, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(97, 97, 97))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    public static void main(String args[]) {        
        
        JTable tabla;
        String[] columnNames = {"First Name",
            "Last Name",
            "Sport",
            "# of Years",
            "Vegetarian"};

        Object[][] data = {
            {"Kathy", "Smith",
                "Snowboarding", new Integer(5), new Boolean(false)},
            {"John", "Doe",
                "Rowing", new Integer(3), new Boolean(true)},
            {"Sue", "Black",
                "Knitting", new Integer(2), new Boolean(false)},
            {"Jane", "White",
                "Speed reading", new Integer(20), new Boolean(true)},
            {"Joe", "Brown",
                "Pool", new Integer(10), new Boolean(false)}
        };

        tabla = new JTable(data, columnNames);
        
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Menu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Menu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Menu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Menu.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }      
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Menu().setVisible(true);
            }
        });         
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JTable jTable1;
    // End of variables declaration//GEN-END:variables

    
    
    public static void read() throws ClassNotFoundException, SQLException {

        PreparedStatement smt = null;
        ResultSet res = null;

        smt = conn.prepareStatement("SELECT * FROM person");

        res = smt.executeQuery();

        int i = 0;
        while (res.next()) {
            System.out.println("Name " + res.getString("name") + ", description: " + res.getString("description"));
            i++;
        }

    }

    public static JTable meterDatos() {
        JTable tabla;
        String[] columnNames = {"First Name",
            "Last Name",
            "Sport",
            "# of Years",
            "Vegetarian"};

        Object[][] data = {
            {"Kathy", "Smith",
                "Snowboarding", new Integer(5), new Boolean(false)},
            {"John", "Doe",
                "Rowing", new Integer(3), new Boolean(true)},
            {"Sue", "Black",
                "Knitting", new Integer(2), new Boolean(false)},
            {"Jane", "White",
                "Speed reading", new Integer(20), new Boolean(true)},
            {"Joe", "Brown",
                "Pool", new Integer(10), new Boolean(false)}
        };

        tabla = new JTable(data, columnNames);
        return tabla;
    }

}