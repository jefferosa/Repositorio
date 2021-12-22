package telas;

import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class TelaTriangulos implements ActionListener {
    JFrame frame;
    JLabel labelLado1;
    JLabel labelLado2;
    JLabel labelLado3;
    JLabel labelInfo;
    JTextField textField1;
    JTextField textField2;
    JTextField textField3;
    JButton btnVerificar;
    JButton btnLimpar;
    JLabel labelImage;

    TelaTriangulos() {
        frame = new JFrame("Triângulos");
        frame.setVisible(true);
        frame.setSize(450, 300);
        frame.setDefaultCloseOperation(JFrame.DISPOSE_ON_CLOSE);

        criarComponentes();
        criarPaineis();
    }

    private void criarPaineis() {
        JPanel painelRoot = new JPanel();
        JPanel painel1 = new JPanel(new GridLayout(6, 1));
        painel1.add(labelLado1);
        painel1.add(textField1);
        painel1.add(labelLado2);
        painel1.add(textField2);
        painel1.add(labelLado3);
        painel1.add(textField3);
        painel1.add(btnVerificar);
        painel1.add(btnLimpar);
        painel1.add(labelInfo);

        JPanel painel2 = new JPanel(new FlowLayout(FlowLayout.LEFT));
        painel2.add(labelImage);

        painelRoot.add(painel1);
        frame.add(painelRoot, BorderLayout.WEST);
        frame.add(painel2, BorderLayout.EAST);

    }

    private void criarComponentes() {
        labelLado1 = new JLabel("Lado 1:");
        labelLado2 = new JLabel("Lado 2:");
        labelLado3 = new JLabel("Lado 3:");
        labelInfo = new JLabel();
        labelImage = new JLabel();
        labelImage.setIcon(new ImageIcon("src/recursos/tri.jpg"));

        btnVerificar = new JButton("Verificar");
        btnLimpar = new JButton("Limpar");

        btnLimpar.addActionListener(this);
        btnVerificar.addActionListener(this);

        textField1 = new JTextField(10);
        textField2 = new JTextField(10);
        textField3 = new JTextField(10);

    }

    private boolean verificarCampos() {
        return !textField1.getText().equals("")
                && !textField2.getText().equals("")
                && !textField3.getText().equals("");
    }

    private void verificarTriangulo() {
        if (verificarCampos()) {
            int lado1 = Integer.parseInt(textField1.getText());
            int lado2 = Integer.parseInt(textField2.getText());
            int lado3 = Integer.parseInt(textField3.getText());

            if (isValidTriangle()) {
                if (lado1 == lado2 && lado2 == lado3) {
                    labelImage.setIcon(new ImageIcon("src/recursos/tri-equilatero.jpg"));
                    labelInfo.setText("Triângulo Equilátero");
                } else if (lado1 == lado2 || lado1 == lado3 || lado2 == lado3) {
                    labelImage.setIcon(new ImageIcon("src/recursos/tri-isoceles.jpg"));
                    labelInfo.setText("Triângulo Isóceles");
                } else if (lado1 != lado2) {
                    labelImage.setIcon(new ImageIcon("src/recursos/tri-escaleno.jpg"));
                    labelInfo.setText("Triângulo Escaleno");
                }
            } else {
                labelImage.setIcon(new ImageIcon("src/recursos/erro.png"));
                labelInfo.setText("Triângulo Inválido");
            }
        } else {
            labelImage.setIcon(new ImageIcon("src/recursos/erro.png"));
            labelInfo.setText("Digite todos os valores");
        }
    }

    public boolean isValidTriangle() {
        int lado1 = Integer.parseInt(textField1.getText());
        int lado2 = Integer.parseInt(textField2.getText());
        int lado3 = Integer.parseInt(textField3.getText());

        return (lado1 + lado2) > lado3 && (lado2 + lado3) > lado1 && (lado1 + lado3) > lado2;
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        String action = e.getActionCommand();

        switch (action) {
            case "Verificar": {
                verificarTriangulo();
                break;
            }
            case "Limpar": {
                textField1.setText("");
                textField2.setText("");
                textField3.setText("");
            }
        }
    }
}
