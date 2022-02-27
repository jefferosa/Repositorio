package telas;

import interfaces.ButtonAction;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.Random;
import java.util.Timer;
import java.util.TimerTask;

public class TelaJogoDaMemoria implements ActionListener, ButtonAction 
{
    JFrame frame;
    JButton btn1, btn2, btn3, btn4, btn5, btn6, btn7, btn8;
    String cartas[][] = new String[2][4];
    ArrayList<JButton> buttons = new ArrayList<>(2);

    ArrayList<String> cartaSelecionada = new ArrayList<>();
    ArrayList<JButton> btnSelecionado = new ArrayList<>();
    int points = 0;
    long tempo;
    Integer Id = 1;
    Connection connection = new Conexao().IniciaConexao();

    TelaJogoDaMemoria() throws InterruptedException
    {
        frame = new JFrame("Jogo da Memória");
        frame.setVisible(true);
        frame.setSize(350, 620);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        criarComponentes();
        adicionarAoFrame();
        
        tempo = System.currentTimeMillis();
        embaralharCartas();

        mostrarResultado();

        new Timer().schedule(new TimerTask() 
        {
            @Override
            public void run()
            {
                ocultarCartas();
            }
        }, 2000);
    }

    private void criarComponentes() 
    {
        btn1 = new JButton(new ImageIcon("src/recursos/carta1.png"));
        btn2 = new JButton(new ImageIcon("src/recursos/carta1.png"));
        btn3 = new JButton(new ImageIcon("src/recursos/carta1.png"));
        btn4 = new JButton(new ImageIcon("src/recursos/carta1.png"));
        btn5 = new JButton(new ImageIcon("src/recursos/carta1.png"));
        btn6 = new JButton(new ImageIcon("src/recursos/carta1.png"));
        btn7 = new JButton(new ImageIcon("src/recursos/carta1.png"));
        btn8 = new JButton(new ImageIcon("src/recursos/carta1.png"));

        btn1.setName("00");
        btn3.setName("01");
        btn2.setName("02");
        btn4.setName("03");
        btn5.setName("10");
        btn7.setName("11");
        btn6.setName("12");
        btn8.setName("13");

        setButtonClickListener(btn1);
        setButtonClickListener(btn2);
        setButtonClickListener(btn3);
        setButtonClickListener(btn4);
        setButtonClickListener(btn5);
        setButtonClickListener(btn6);
        setButtonClickListener(btn7);
        setButtonClickListener(btn8);


        buttons.add(btn1);
        buttons.add(btn3);
        buttons.add(btn2);
        buttons.add(btn4);
        buttons.add(btn5);
        buttons.add(btn7);
        buttons.add(btn6);
        buttons.add(btn8);

    }

    private void adicionarAoFrame()
    {
        frame.add(btn1);
        frame.add(btn3);
        frame.add(btn2);
        frame.add(btn4);
        frame.add(btn5);
        frame.add(btn7);
        frame.add(btn6);
        frame.add(btn8);
    }

    @Override
    public void setButtonClickListener(JButton button)
    {
        button.addActionListener(this);
    }

    @Override
    public void actionPerformed(ActionEvent e) 
    {
        Icon carta = ((JButton) e.getSource()).getIcon();
        JButton btn = (JButton) e.getSource();

        String id = btn.getName();
        int x = Integer.parseInt(String.valueOf(id.charAt(0)));
        int y = Integer.parseInt(String.valueOf(id.charAt(1)));

        Date teste = new Date(System.currentTimeMillis());

        if (carta.toString().equals("src/recursos/carta1.png"))
        {
            cartaSelecionada.add(cartas[x][y]);
            btnSelecionado.add(btn);
            btn.setIcon(new ImageIcon(cartas[x][y]));

            if (cartaSelecionada.size() == 2) 
            {
                if (!cartaSelecionada.get(0).equals(cartas[x][y])) 
                {
                    for (JButton currentBtn : btnSelecionado)
                        currentBtn.setIcon(new ImageIcon("src/recursos/carta1.png"));
                } 
                else 
                {
                    btn.setIcon(new ImageIcon(cartas[x][y]));
                    points++;
                }
                
                cartaSelecionada.clear();
                btnSelecionado.clear();
            }
            
            System.out.println(points);

            if (points == 4)
            {
                JOptionPane.showMessageDialog(frame, "Você Ganhou!", "Parabéns", JOptionPane.INFORMATION_MESSAGE);
                
                try
                {
                    tempo = System.currentTimeMillis() - tempo;
                    long minutes = (tempo / 1000) / 60; 
                    long seconds = (tempo / 1000) % 60; 
                    String tempoJogo = teste.toString() + " 00:0" + minutes + ":" + seconds;

                    String sql = "insert into historicos values(?, ?);";
                    PreparedStatement statement = connection.prepareStatement(sql);
                    statement.setInt(1, Id);
                    statement.setString(2, tempoJogo);
                    statement.execute();
                    ++Id;

                    frame.dispose();
                } 
                catch (SQLException e1) 
                {
                    e1.printStackTrace();
                }
                
            }
        }
    }

    private void embaralharCartas()
    {
        Random rand = new Random();

        ArrayList<Object> cartasPath = new ArrayList<>();

        cartasPath.add("src/recursos/carta2.png");
        cartasPath.add("src/recursos/carta3.png");
        cartasPath.add("src/recursos/carta4.png");
        cartasPath.add("src/recursos/carta5.png");

        for (int i = 0; i < 2; i++) 
        {
            int finalJ = i;
            ArrayList<Integer> numerosAnteriores = new ArrayList<>(4);

            cartasPath.forEach(img -> {
                int randomNumber;

                randomNumber = rand.nextInt(4);

                while (numerosAnteriores.contains(randomNumber)) 
                    randomNumber = rand.nextInt(4);

                numerosAnteriores.add(randomNumber);

                cartas[finalJ][randomNumber] = img.toString();
            });
        }
    }

    private void ocultarCartas()
    {
        JButton btn;
        for (JButton button : buttons)
        {
            btn = button;
            btn.setIcon(new ImageIcon("src/recursos/carta1.png"));
        }
    }

    private void mostrarResultado()
    {
        JButton currentButton;
        int contador = 0;
        
        for (int i = 0; i < 2; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                contador++;

                if (i == 1)
                    currentButton = buttons.get(contador - 1);
                else
                    currentButton = buttons.get(j);

                currentButton.setIcon(new ImageIcon(cartas[i][j]));
            }
        }
    }
}
