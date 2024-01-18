/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package membuatcrudmvcjava.Controller;

import java.util.HashSet;
import java.util.Set;
import javax.swing.JOptionPane;
import membuatcrudmvcjava.DAO.DAO_Member;
import membuatcrudmvcjava.DAOImplement.Implement;
import membuatcrudmvcjava.Model.ModelMember;
import membuatcrudmvcjava.Model.TabelModelMember;
import membuatcrudmvcjava.View.ViewMember;

/**
 *
 * @author Administrator
 */
public class ControllerMember {
    
    ViewMember frame_member;
    Implement  implement_member;
    java.util.List<ModelMember> list_member;
    
    public ControllerMember(ViewMember frame_member){
        this.frame_member = frame_member;
        implement_member = new DAO_Member();
        list_member = implement_member.getALL();
    }
    
    //Tombol Reset
    public void reset(){
        frame_member.getTxtID().setText("");
        frame_member.getTxtNamaPelanggan().setText("");
        frame_member.getTxtNoTelp().setText("");
        frame_member.getTxtAlamat().setText("");
        frame_member.getTxtPaketPelanggan().setSelectedItem("--- Pilih Paket ---");
        
    }
    
    //Tampil data ke tabel
    public void isiTable(){
        list_member = implement_member.getALL();
        TabelModelMember tmb = new TabelModelMember(list_member);
        frame_member.getTblDataMember().setModel(tmb);
    }
    
    //Menampilkan Data Ke Form ketika data di klik
    public void isiField(int row){
        frame_member.getTxtID().setText(list_member.get(row).getId().toString());
        frame_member.getTxtNamaPelanggan().setText(list_member.get(row).getNama());
        frame_member.getTxtNoTelp().setText(list_member.get(row).getNo_telp());
        frame_member.getTxtAlamat().setText(list_member.get(row).getAlamat());
        frame_member.getTxtPaketPelanggan().setSelectedItem(list_member.get(row).getPaket());
    }
    //Insert Data
    public void insert(){
        if(!frame_member.getTxtNamaPelanggan().getText().trim().isEmpty()&!frame_member.getTxtNoTelp().getText().trim().isEmpty()){
            ModelMember b = new ModelMember();
            b.setNama(frame_member.getTxtNamaPelanggan().getText());
            b.setNo_telp(frame_member.getTxtNoTelp().getText());
            b.setAlamat(frame_member.getTxtAlamat().getText());
            b.setPaket(frame_member.getTxtPaketPelanggan().getSelectedItem().toString());
            
            implement_member.insert(b);
            JOptionPane.showMessageDialog(null, "Data Berhasil Di Simpan");
        } else {
            JOptionPane.showMessageDialog(null, "Data Tidak Boleh Kosong");
        }
    }
    
    //update Data Dari Tabel ke Database
    public void update(){
        if(!frame_member.getTxtID().getText().trim().isEmpty()){
            ModelMember b = new ModelMember();
            b.setNama(frame_member.getTxtNamaPelanggan().getText());
            b.setNo_telp(frame_member.getTxtNoTelp().getText());
            b.setAlamat(frame_member.getTxtAlamat().getText());
            b.setPaket(frame_member.getTxtPaketPelanggan().getSelectedItem().toString());
            b.setId(Integer.parseInt(frame_member.getTxtID().getText()));
            
            implement_member.update(b);
            JOptionPane.showMessageDialog(null, "Data Berhasil Di Update");
        } else {
            JOptionPane.showMessageDialog(null, "Silahkan Pilih Data Yang Akan Di Update");
        }
    }
    
    //Hapus Data Pada Tabel
    public void delete(){
        if(!frame_member.getTxtID().getText().trim().isEmpty()){
            int id = Integer.parseInt(frame_member.getTxtID().getText());
            implement_member.delete(id);
            JOptionPane.showMessageDialog(null, "Data Berhasil Di Hapus");
        } else {
            JOptionPane.showMessageDialog(null, "Silahkan Pilih Data Yang Akan Di Hapus");
        }
    }
    
    //Cari Data
    public void isiTableCariNama(){
        list_member = implement_member.getCariNama(frame_member.getTxtCariData().getText());
        TabelModelMember tmb = new TabelModelMember(list_member);
        frame_member.getTblDataMember().setModel(tmb);
    }
    
    public void carinama(){
        if(!frame_member.getTxtCariData().getText().trim().isEmpty()){
            implement_member.getCariNama(frame_member.getTxtCariData().getText());
            isiTableCariNama();
        } else {
            JOptionPane.showMessageDialog(frame_member, "Silahkan Pilih Data !!");
        }
    }
}
