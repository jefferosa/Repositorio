package telas;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TelaInicial implements ActionListener {

    public TelaInicial() {
        JFrame frame = new JFrame("Tela Inicial");
        frame.setVisible(true);
        frame.setSize(300, 300);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        JButton button1 = new JButton("Lanche");
        JButton button2 = new JButton("Esportes");
        JButton button3 = new JButton("ComboBox");
        JButton button4 = new JButton("Triângulos");

        frame.add(button1);
        frame.add(button2);
        frame.add(button3);
        frame.add(button4);

        setOnClickListener(button1);
        setOnClickListener(button2);
        setOnClickListener(button3);
        setOnClickListener(button4);
    }

    private void setOnClickListener(JButton button) {

        button.addActionListener(this);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        String action = e.getActionCommand();

        switch (action){
            case "Lanche":{
                new TelaLanchonete();
                break;
            }
            case "Esportes": {
                new TelaEsportes();
                break;
            }
            case "ComboBox":{
                new TelaComboBox();
                break;
            }
            case "Triângulos":{
                new TelaTriangulos();
                break;
            }
        }
    }
}
