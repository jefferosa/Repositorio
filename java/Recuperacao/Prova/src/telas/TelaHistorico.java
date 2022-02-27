package telas;

import javax.swing.*;
import java.awt.*;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public class TelaHistorico
{
    JFrame frame;
    Connection connection = new Conexao().IniciaConexao();

    TelaHistorico() 
    {
        frame = new JFrame("Historico");
        frame.setVisible(true);
        frame.setSize(200, 150);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        try
        {
            Statement statement = connection.createStatement();
            String sql = "select * from historicos";
            ResultSet resultSet = statement.executeQuery(sql);

            while(resultSet.next())
            {
                frame.add(new JLabel(resultSet.getString(2)));
            }
        }
        catch (SQLException e1) 
        {
            e1.printStackTrace();
        }
    }
}
