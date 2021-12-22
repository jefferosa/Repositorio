package telas;

import javax.swing.*;
import java.awt.*;

public class TelaEsportesResultado {
    JFrame frame;
    JLabel label1, label2;
    JTextField textField1, textField2;
    JLabel img;

    public TelaEsportesResultado(String esporte, int votos) {
        frame = new JFrame("Resultados");
        frame.setVisible(true);
        frame.setSize(250, 300);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        criarComponentes(esporte, votos);
        adicionarAoFrame();
    }

    private void criarComponentes(String esporte, int votos) {
        label1 = new JLabel("Mais Votado:");
        label2 = new JLabel("Qtd de votos:");
        img = new JLabel();
        img.setIcon(new ImageIcon("src/recursos/" + esporte.toLowerCase() + ".png"));

        textField1 = new JTextField(10);
        textField2 = new JTextField(10);

        textField1.setEditable(false);
        textField2.setEditable(false);

        textField1.setText(esporte);

        textField2.setText(String.valueOf(votos));
    }

    private void adicionarAoFrame() {
        frame.add(label1);
        frame.add(textField1);
        frame.add(label2);
        frame.add(textField2);
        frame.add(img);
    }
}
