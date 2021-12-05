import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.SwingUtilities;

public class exercicios implements ActionListener {
	JLabel label, label2;
	JTextField textField;
	
	public exercicios() 
	{
		JFrame frame = new JFrame("Eh Primo?");
		frame.setVisible(true);
		frame.setSize(140, 150);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setLayout(new FlowLayout());
		
		label2 = new JLabel("Digite um número:");
		frame.add(label2);
		
		textField = new JTextField(10);
		textField.addActionListener(this);
		textField.setActionCommand("Enter");
		frame.add(textField);
		
		JButton button = new JButton("Verificar");
		button.addActionListener(this);
		frame.add(button);

		label = new JLabel("");
		frame.add(label);
	}
	
	public static void main(String[] args) 
	{
		SwingUtilities.invokeLater(new Runnable()
		{
			@Override
			public void run()
			{
				new exercicios();
			}
		});
	}

	@Override
	public void actionPerformed(ActionEvent e) 
	{
		if (e.getActionCommand().equalsIgnoreCase("Verificar"))
		{
			int num = Integer.parseInt(textField.getText());
			boolean ehPrimo = true;
			
			for (int i = 2; i < num; i++)
			{
				if (num % i == 0)
				{
					ehPrimo = false;
					break;
				}
			}
			
			if (ehPrimo)
				label.setText("O número " + num + " é primo!");
			else
				label.setText("O número " + num + " não é primo!");
				
		}
		
		textField.setText("");
	}
}
