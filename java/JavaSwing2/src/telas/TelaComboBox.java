package telas;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TelaComboBox implements ActionListener {

    JFrame frame;
    JButton btnAdd, btnRemove;
    JLabel label;
    JTextField textField;
    JComboBox<Integer> comboBox;
    int contagem = 0;

    public TelaComboBox() {
        frame = new JFrame("Contador");
        frame.setVisible(true);
        frame.setSize(240, 200);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        criarComponentes();
        addAoFrame();
    }

    private void criarComponentes() {
        Integer[] numeros = {1, 2, 3, 4, 5};
        btnAdd = new JButton(new ImageIcon("src/recursos/add.png"));
        btnRemove = new JButton(new ImageIcon("src/recursos/minus.png"));
        btnAdd.setText("Mais");
        btnRemove.setText("Menos");

        btnRemove.addActionListener(this);
        btnAdd.addActionListener(this);

        comboBox = new JComboBox(numeros);
        comboBox.addActionListener(this);

        label = new JLabel("Contador");
        textField = new JTextField(5);
        textField.setEditable(false);
    }

    private void addAoFrame() {
        frame.add(label);
        frame.add(textField);
        frame.add(comboBox);
        frame.add(btnAdd);
        frame.add(btnRemove);
    }

    private void atualizarContagem(){
        textField.setText(String.valueOf(contagem));
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        String action = e.getActionCommand();

        switch (action) {
            case "comboBoxChanged": {
                contagem = Integer.parseInt(comboBox.getSelectedItem().toString());
                break;
            }
            case "Mais": {
                contagem += 1;
                break;
            }
            case "Menos": {
                contagem -= 1;
                break;
            }
        }
        atualizarContagem();
    }
}
