package telas;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.ItemEvent;
import java.awt.event.ItemListener;

public class TelaEsportes implements ItemListener, ActionListener {
    JFrame frame;
    JLabel label1;
    JCheckBox checkBox1, checkBox2, checkBox3;
    JButton btn1, btn2;
    int futebol = 0, volei = 0, basquete = 0;

    public TelaEsportes() {
        frame = new JFrame("Esportes");
        frame.setVisible(true);
        frame.setSize(250, 120);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        criarComponentes();
        addAoFrame();
    }

    private void addAoFrame() {
        frame.add(label1);
        frame.add(checkBox1);
        frame.add(checkBox2);
        frame.add(checkBox3);
        frame.add(btn1);
        frame.add(btn2);
    }

    private void criarComponentes() {
        label1 = new JLabel("Quais esportes você pratica?");
        checkBox1 = new JCheckBox("Futebol");
        checkBox2 = new JCheckBox("Volei");
        checkBox3 = new JCheckBox("Basquete");
        btn1 = new JButton("Votar");
        btn2 = new JButton("Terminar");

        btn1.addActionListener(this);
        btn2.addActionListener(this);
    }

    @Override
    public void itemStateChanged(ItemEvent e) {

    }

    private void votar() {
        if (checkBox1.isSelected()) {
            futebol += 1;
        }
        if (checkBox2.isSelected()) {
            volei += 1;
        }
        if (checkBox3.isSelected()) {
            basquete += 1;
        }

        checkBox1.setSelected(false);
        checkBox2.setSelected(false);
        checkBox3.setSelected(false);
    }

    private void calcularResultados() {
        String esporte = "";
        int maior = 0;

        if (futebol > maior) {
            maior = futebol;
            esporte = "Futebol";
        }
        if (volei > maior) {
            maior = volei;
            esporte = "Volei";
        }
        if (basquete > maior) {
            maior = basquete;
            esporte = "Basquete";
        }

        mostrarResultados(maior, esporte);
    }

    private void mostrarResultados(int votos, String esporte) {
        SwingUtilities.invokeLater(() -> new TelaEsportesResultado(esporte, votos));
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        String action = e.getActionCommand();

        switch (action) {
            case "Votar" -> {
                votar();
            }
            case "Terminar" -> {
                calcularResultados();
            }
        }
    }
}
