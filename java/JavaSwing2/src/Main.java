import javax.swing.*;

import telas.TelaInicial;
import telas.TelaLanchonete;

public class Main {

    public static void main(String[] args) {
        SwingUtilities.invokeLater(TelaInicial::new);
    }
}
