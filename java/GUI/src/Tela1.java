import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.SwingUtilities;
import java.awt.FlowLayout;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Tela1 implements ActionListener 
{
	JLabel label;
	JTextField textField;
	
	public Tela1() 
	{
		JFrame frame = new JFrame("Título da Tela");
		frame.setVisible(true);
		frame.setSize(140, 150);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setLayout(new FlowLayout());
		
		textField = new JTextField(10);
		textField.addActionListener(this);
		textField.setActionCommand("Enter");
		frame.add(textField);
		
		JButton button = new JButton("Executar 1");
		button.addActionListener(this);
		frame.add(button);
		
		button = new JButton("Executar 2");
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
				new Tela1();
			}
		});
	}

	@Override
	public void actionPerformed(ActionEvent e) 
	{
		if (e.getActionCommand().equalsIgnoreCase("Executar 1"))
			label.setText(textField.getText().toLowerCase());
		else if (e.getActionCommand().equalsIgnoreCase("Executar 2"))
			label.setText(textField.getText().toUpperCase());
		else	
			label.setText(textField.getText());
		
		textField.setText("");
	}
}
