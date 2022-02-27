package telas;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class Conexao 
{
    public Connection connection;

    public Connection IniciaConexao() 
    {
        try
        { 
            String url = "jdbc:mysql://localhost:3307/projeto";
            String user = "root";
            String password = "8809";
            connection = DriverManager.getConnection(url, user, password);
        } 
        catch (SQLException e) 
        {
            e.printStackTrace();
        }

        return connection;
    }
}
