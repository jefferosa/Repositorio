package telas;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TelaInicial implements ActionListener
{
    public TelaInicial() 
    {
        JFrame frame = new JFrame("Tela Inicial");
        frame.setVisible(true);
        frame.setSize(300, 300);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        JButton button1 = new JButton("Jogo da Memória");
        JButton button2 = new JButton("Historico");

        frame.add(button1);
        frame.add(button2);

        setOnClickListener(button1);
        setOnClickListener(button2);
    }

    private void setOnClickListener(JButton button) 
    {
        button.addActionListener(this);
    }

    @Override
    public void actionPerformed(ActionEvent e)
    {
        String action = e.getActionCommand();

        if (action == "Jogo da Memória") 
        {
            try 
            {
                new TelaJogoDaMemoria();
            } 
            catch (InterruptedException ex) 
            {
                ex.printStackTrace();
            }
        }
        else if (action == "Historico") 
            new TelaHistorico();
    }
}
