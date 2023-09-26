/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aplikasijava;

/**
 *
 * @author Administrator
 */
public class Mahasiswa {
    private String nama;
    private int Nim;
    private String fakultas;
    
    public Mahasiswa (String nama, int Nim, String fakultas){
        this.nama = nama;
        this.Nim = Nim;
        this.fakultas = fakultas;
    }
    public String getNama(){
        return nama;
    }
    public int getNim(){
        return Nim;
    }
    public String getFakultas(){
        return fakultas;
    }
}
