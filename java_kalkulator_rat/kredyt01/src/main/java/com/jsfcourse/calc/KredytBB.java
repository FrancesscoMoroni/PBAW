package com.jsfcourse.calc;

import javax.inject.Inject;
import javax.inject.Named;
import javax.enterprise.context.RequestScoped;
import javax.enterprise.context.SessionScoped;
import javax.faces.application.FacesMessage;
import javax.faces.context.FacesContext;

@Named
@RequestScoped
//@SessionScoped
public class KredytBB {
	private Float loan;			// wartość kredytu
	private Float installment;	// ilość rat na rok
	private Float interest;		// oprocentowanie kredytu
	private Float inAmount;		// ilość wszystkich rat
	private Double result;

	@Inject
	FacesContext ctx;
	
	
	
	public void calc() {
		Double result = (loan * interest) / (installment * (1 - Math.pow(installment / (installment + interest), inAmount)));
		result = (double) Math.round(result * 100) / 100;
		ctx.addMessage(null, new FacesMessage(FacesMessage.SEVERITY_INFO, "Wynik: " + result, null));
		setResult(result);
	}



	public Float getInstallment() {
		return installment;
	}



	public void setInstallment(Float installment) {
		this.installment = installment;
	}



	public Float getLoan() {
		return loan;
	}



	public void setLoan(Float loan) {
		this.loan = loan;
	}



	public Float getInAmount() {
		return inAmount;
	}



	public void setInAmount(Float inAmount) {
		this.inAmount = inAmount;
	}



	public Float getInterest() {
		return interest;
	}



	public void setInterest(Float interest) {
		this.interest = interest;
	}



	public Double getResult() {
		return result;
	}



	public void setResult(Double result) {
		this.result = result;
	}
	
}
