/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package membuatcrudmvcjava.Model;

import javax.swing.table.AbstractTableModel;

/**
 *
 * @author Administrator
 */
public class TabelModelMember extends AbstractTableModel{

    java.util.List<ModelMember> list_member;
    
    public TabelModelMember(java.util.List<ModelMember> list_member){
        this.list_member = list_member;
    }
    
    @Override
    public int getRowCount() {
        return list_member.size();
    }

    @Override
    public int getColumnCount() {
        return 5;
    }

    @Override
    public String getColumnName(int column) {
        switch(column){
            case 0:
                return "ID/Kode";
            case 1:
                return "Nama";
            case 2:
                return "No Telepon";
            case 3:
                return "Alamat";
            case 4:
                return "Paket";
            default:
                return null;
        }
    }
    
    @Override
    public Object getValueAt(int row, int column) {
        switch(column){
            case 0:
                return list_member.get(row).getId();
            case 1:
                return list_member.get(row).getNama();
            case 2:
                return list_member.get(row).getNo_telp();
            case 3:
                return list_member.get(row).getAlamat();
            case 4:
                return list_member.get(row).getPaket();
            default:
                return null;
        }
    }
    
    
    
}
