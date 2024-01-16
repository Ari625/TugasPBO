/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package membuatcrudmvcjava.DAOImplement;

import java.util.List;
import membuatcrudmvcjava.Model.ModelMember;

/**
 *
 * @author Administrator
 */
public interface Implement {
    public void insert(ModelMember b);
    public void update(ModelMember b);
    public void delete(int id);
    
    public List<ModelMember> getALL();
    public List<ModelMember> getCariNama(String nama);
}
