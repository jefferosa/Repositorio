package telas;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.ItemEvent;
import java.awt.event.ItemListener;
import java.util.ArrayList;

public class TelaLanchonete implements ItemListener, ActionListener {

    JFrame frame;
    JLabel labelInfo, labelInfo2, labelValor;
    JCheckBox check1, check2, check3, check4, check5;
    JButton btnAdicionar, btnLimpar;
    JTextField txtField;
    Float valorTotal = 0f;
    ArrayList<JCheckBox> checkBoxes = new ArrayList(5);

    public TelaLanchonete() {
        frame = new JFrame("Lanche");
        frame.setVisible(true);
        frame.setSize(150, 300);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);
        frame.setLayout(new FlowLayout());

        criarComponentes();
        adicionarAoFrame();
        setCheckBoxItemListener();
        addCheckBoxes();
    }

    private void criarComponentes() {
        check1 = new JCheckBox("Opção 1");
        check2 = new JCheckBox("Opção 2");
        check3 = new JCheckBox("Opção 3");
        check4 = new JCheckBox("Opção 4");
        check5 = new JCheckBox("Opção 5");
        labelInfo = new JLabel("Itens selecionados");
        labelInfo2 = new JLabel("Valor Total:");
        btnAdicionar = new JButton("Adicionar");
        btnLimpar = new JButton("Limpar");
        txtField = new JTextField(10);
        txtField.setEditable(false);
    }

    private void setCheckBoxItemListener() {
        check1.addItemListener(this);
        check2.addItemListener(this);
        check3.addItemListener(this);
        check4.addItemListener(this);
        check5.addItemListener(this);
        btnLimpar.addActionListener(this);
        btnAdicionar.addActionListener(this);
    }

    private void adicionarAoFrame() {
        frame.add(labelInfo);
        frame.add(check1);
        frame.add(check2);
        frame.add(check3);
        frame.add(check4);
        frame.add(check5);
        frame.add(btnAdicionar);
        frame.add(labelInfo2);
        frame.add(txtField);
        frame.add(btnLimpar);

    }

    private void addCheckBoxes(){
        checkBoxes.add(check1);
        checkBoxes.add(check2);
        checkBoxes.add(check3);
        checkBoxes.add(check4);
        checkBoxes.add(check5);
    }
    private void atualizaValor() {
        txtField.setText(valorTotal.toString());
    }

    private void limparValores() {
        valorTotal = 0.0f;
        txtField.setText("0");

        for(int i =0; i < checkBoxes.size(); i++){
            JCheckBox temp = checkBoxes.get(i);
            temp.setSelected(false);
        }
    }

    @Override
    public void itemStateChanged(ItemEvent e) {
        int state = e.getStateChange();
        if (state == 1) {
            if (check1.isSelected()) {
                valorTotal += 10.50f;
            } else if (check2.isSelected()) {
                valorTotal += 19.90f;
            } else if (check3.isSelected()) {
                valorTotal += 29.99f;
            } else if (check4.isSelected()) {
                valorTotal += 7.90f;
            } else if (check5.isSelected()) {
                valorTotal += 11.90f;
            }
        }
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        String action = e.getActionCommand();

        switch (action) {
            case "Limpar": {
                limparValores();
            }
            case "Adicionar": {
                atualizaValor();
            }
        }
    }
}
